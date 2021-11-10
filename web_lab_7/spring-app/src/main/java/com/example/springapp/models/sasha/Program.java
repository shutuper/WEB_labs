package com.example.springapp.models.sasha;

import lombok.Data;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

import javax.persistence.*;
import java.util.List;

@Entity
@Getter
@Setter
@NoArgsConstructor
public class Program {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	private String title;

	private Long budget;

	@ManyToMany
	private List<Presenter> presenters;

	@ManyToMany
	private List<Studio> studios;


	public Program(String title, Long budget, List<Presenter> presenters, List<Studio> studios) {
		this.title = title;
		this.budget = budget;
		this.presenters = presenters;
		this.studios = studios;
	}

}
