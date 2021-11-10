package com.example.springapp.models.ira;

import javax.persistence.*;
import java.util.Objects;

@Entity
public class Available {
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int id;
	private int price;

	@ManyToOne
	private Medicines medicines;

	@ManyToOne
	private Pharmacies Pharmacies;


	@Id
	@Column(name = "ID")
	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
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
		Available available = (Available) o;
		return id == available.id && price == available.price;
	}

	@Override
	public int hashCode() {
		return Objects.hash(id, price);
	}
}
