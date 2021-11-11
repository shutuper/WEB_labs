package com.example.springapp.models.ira;

import javax.persistence.*;
import java.util.Objects;

@Entity
public class Medicines {
	@GeneratedValue(strategy = GenerationType.AUTO)
	private int id;
	private String name;
	private String description;
	private int price;

	@ManyToOne
	private Producers producers;


	@Id
	@Column(name = "ID")
	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	@Basic
	@Column(name = "Name")
	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	@Basic
	@Column(name = "Description")
	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	@Basic
	@Column(name = "Price")
	public int getPrice() {
		return price;
	}

	public void setPrice(int price) {
		this.price = price;
	}

	@Override
	public boolean equals(Object o) {
		if (this == o) return true;
		if (o == null || getClass() != o.getClass()) return false;
		Medicines medicines = (Medicines) o;
		return id == medicines.id && price == medicines.price && Objects.equals(name, medicines.name) && Objects.equals(description, medicines.description);
	}

	@Override
	public int hashCode() {
		return Objects.hash(id, name, description, price);
	}
}
